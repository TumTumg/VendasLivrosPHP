<?php
namespace PHP\Modelo;

class Usuario {
    // Variáveis
    protected string $nome;
    protected string $endereco;
    protected string $telefone;
    protected string $dataNasc;
    protected string $login;
    protected string $senha;

    // Armazenamento de usuários
    private static array $usuarios = [];

    // Método Construtor
    public function __construct(string $nome, string $endereco, string $telefone, string $dataNasc, string $login, string $senha) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->dataNasc = $dataNasc;
        $this->login = $login;
        $this->senha = $senha;
    }

    // Métodos Get e Set
    public function __get(string $campo) {
        return $this->$campo;
    }

    public function __set(string $campo, string $valor) {
        $this->$campo = $valor;
    }

    // Método imprimir
    public function imprimir(): string {
        return "<br>Nome: " . $this->nome .
               "<br>Endereço: " . $this->endereco .
               "<br>Telefone: " . $this->telefone .
               "<br>Data de Nascimento: " . $this->dataNasc .
               "<br>Login: " . $this->login .
               "<br>Senha: " . $this->senha;
    }

    // Método para adicionar um usuário
    public static function adicionarUsuario(Usuario $usuario) {
        self::$usuarios[] = $usuario;
    }

    // Método para obter todos os usuários
    public static function obterUsuarios(): array {
        return self::$usuarios;
    }

    // Método para encontrar um usuário por login
    public static function encontrarUsuarioPorLogin(string $login): ?Usuario {
        foreach (self::$usuarios as $usuario) {
            if ($usuario->login === $login) {
                return $usuario;
            }
        }
        return null;
    }

    // Método para atualizar um usuário
    public static function atualizarUsuario(string $login, array $novosDados): bool {
        $usuario = self::encontrarUsuarioPorLogin($login);
        if ($usuario) {
            foreach ($novosDados as $campo => $valor) {
                $usuario->__set($campo, $valor);
            }
            return true;
        }
        return false;
    }

    // Método para deletar um usuário
    public static function deletarUsuario(string $login): bool {
        foreach (self::$usuarios as $key => $usuario) {
            if ($usuario->login === $login) {
                unset(self::$usuarios[$key]);
                return true;
            }
        }
        return false;
    }

    // Método para validar login
    public static function validarLogin(string $login, string $senha): bool {
        $usuario = self::encontrarUsuarioPorLogin($login);
        return $usuario && $usuario->senha === $senha;
    }
}
?>
