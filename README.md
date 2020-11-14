<h1 align=center> 
  < JaguarLang 🐆> 
</h1>
<p align=center>
  <img src = https://github.com/caue-alves/Linguagem-Jaguar/blob/master/.github/img/jaguar.png?raw=true"/>
A project of a compiled and high level language									
<br><br>
<img alt="GitHub" src="https://img.shields.io/github/license/caue-alves/Linguagem-Jaguar?color=green">
<img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/caue-alves/Linguagem-Jaguar?color=informational">
<img alt="GitHub commit activity" src="https://img.shields.io/github/commit-activity/w/caue-alves/Linguagem-Jaguar?color=9cf"><br>
<img alt="GitHub top language" src="https://img.shields.io/github/languages/top/caue-alves/Linguagem-Jaguar?color=blueviolet">
<img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/caue-alves/Linguagem-Jaguar?color=blue">
</p>

# Working

JaguarLang is a script language php-based. PHP interprets files with `*.jagr` sufix and translate them to php based on `replacement`. The objective is use less and less php for what the language be increasingly independent of any other.

# Variables

A new non-php-based data structure is being developed, where is created a `Variable` class and your info are inserted in the file with `*.jlvs` sufix (**J**aguar **V**ariable **L**ocal **S**torage).

# Examples

There are some language examples:
```
!< Comentary >!
```
Boolean:
```
@<bool_ex = @true;
```

string:
```
@<str_ex = "olá";
```
int:
```
@<int_ex = 123;
```

float:
```
@<float_ex = 134.67;
```
Conditional:
```
-if-(@<int_ex == 123) {
	writeLine(int_ex . JAGR_EOL);
} -else- {
	writeLine('int não encontrado. JAGR_EOL');
}
```

Class:
```
Class Mamifero
{
	public func _init(@<idade)
	{
		this--idade = @<idade;
	}

	publica funcao vc_anda()
	{
		return @true;
	}
}
```
Instantiate class:
```
@<Cachorro = new Mamifero(20);
writeLine(@<Cachorro--vc_anda() . JAGR_EOL);
```
Exceptions and errors
```
try {
	!<...Code>!
} except (Exception @<e) {
	("catched exception");
}
```
`foreach` loop
```
@<array = [];
foreach(@<array as @<a) {
	writeLine(@<a);
}
```
`while` loop
```
@<bool = @false
while(var bool == @false) {
	writeLine ("false!");
	-if- (100 == 100) {
		@<bool = @true;
	}
}
```

# Note
On variables, specify the type isn't necessary, we only used the names of `str_ex`, `int_ex` to exemplify, but the name `@<` is essential before the variable value.

# Structures
* `JAGR_EOL`: Endo of Line;
* `--`: Class method;
* `_init`: Constructor;
* `-if-`: Conditional;
* `-else-`: Realized if `-if-` don't be confirmed;
* `while`: while the condition is confirmed all inside will be executed.
