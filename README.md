<h1 align=center> 
  < Linguagem Jaguar 🐯> 
</h1>
<p align=center>
  <img src = "https://github.com/caue-alves/Linguagem-Jaguar/blob/master/img/jaguar.png?raw=true">
Um projeto de linguagem compilada, orientada a objetos e de alto nível<br><br>
  
  
<img alt="GitHub" src="https://img.shields.io/github/license/caue-alves/Linguagem-Jaguar">
<img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/caue-alves/Linguagem-Jaguar">
<img alt="GitHub commit activity" src="https://img.shields.io/github/commit-activity/w/caue-alves/Linguagem-Jaguar"><br>
<img alt="GitHub top language" src="https://img.shields.io/github/languages/top/caue-alves/Linguagem-Jaguar">
<img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/caue-alves/Linguagem-Jaguar">
</p>

# Funcionamento

A linguagem Jaguar é uma linguagem de scripts baseada e interpretada em PHP. O PHP interpreta os arquivos de sufixo `*.jagr` e os traduz em php com base em `replacement`. O objetivo é usar cada vez menos o PHP para que a linguagem se torne cada vez mais independente de qualquer outra

# Variáveis

Uma nova estrutura de variáveis não-baseada em PHP está sendo desenvolvida, onde é criada uma classe `Variable` e suas informações são inseridas no arquivo de sufixo `*.jvls`(**J**aguar **V**ariable **L**ocal **S**torage ) 

# Exemplos

Seguem alguns exemplos da linguagem:
```
!< Comentário >!
```
Variável Booleana
```
var bool_ex = verdadeiro;
```

Variável string
```
var str_ex = "olá";
```
Variável int
```
var int_ex = 123;
```

Variável Float
```
var float_ex = 134.67;
```
Condicional
```
-se-(var int_ex == 123) {
	escreva(int_ex . JAGR_EOL);
} -senao- {
	escreva('int não encontrado. JAGR_EOL');
}
```

Classe
```
Classe Mamifero
{
	publica funcao _init(var idade)
	{
		var o_mesmo-idade = var idade;
	}

	publica funcao vc_anda()
	{
		retorne verdadeiro;
	}
}
```
Instanciar classe
```
var Cachorro = new Mamifero(20);
escreva(var Cachorro-vc_anda() . JAGR_EOL);
```
Tratamento de Erros:
```
tente {
	!<...Cógigo>!
} capture (excecao var e) {
	escreva("excessão capturada");
}
```
Laço `foreach`
```
var array = [];
para_cada(var array as var a) {
	escreva(var a);
}
```
Laço `while`
```
var bool = falso
enquanto(var bool == falso) {
	escreva ("falsooo");
	if (100 == 100) {
		var bool = verdadeiro;
	}
}
```

# Observação
Nas variáveis, especificar o tipo não é necessário, apenas usamos os nomes de `str_ex`, `int_ex`, etc, para exemplificar, mas o nome `var` é crucial antes da declaração da variável

# Palavras-Chave
- `JAGR_EOL`: Fim de linha
- `-`: Chamar método de classe
- `_init`: Construtor
- `-se-`: Condicional
- `-senao-`: Realizada se o `-se-` não for cumprido
