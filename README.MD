# Exemplo didático de Orientação a Objetos em PHP

Este projeto apresenta os fundamentos da **Programação Orientada a Objetos (POO)** em PHP por meio de uma hierarquia de veículos.

## Programação orientada a objetos

A orientação a objetos organiza o software a partir de **objetos**, que representam coisas do mundo real ou conceitos do problema.

Um objeto é criado a partir de uma **classe**. A classe funciona como um modelo; o objeto é uma instância desse modelo.

Os quatro conceitos fundamentais são:

- **Abstração:** representar apenas as informações e comportamentos relevantes ao problema.
- **Encapsulamento:** controlar o acesso aos dados e aos comportamentos de uma classe.
- **Herança:** permitir que uma classe reutilize atributos e métodos de outra.
- **Polimorfismo:** permitir comportamentos diferentes por meio de métodos definidos em classes relacionadas.

Embora PHP permita propriedades e métodos públicos sem restrições explícitas, estes são exemplos didáticos dos conceitos acima.

## Projeto: hierarquia de veículos

O projeto possui:

- `Veiculo`: classe base, comum a todos os veículos;
- `carro`: especialização de `Veiculo`;
- `bicicleta`: especialização de `Veiculo`.

## Classe, atributos e métodos

Em `veiculo.php`, a classe `Veiculo` representa os dados comuns a um veículo:

```php
class Veiculo
{
    public $ano_fabricao;
    public $marca;
    public $modelo;
    public $tipo;
}
```

As variáveis da classe são chamadas de **atributos** ou **propriedades**. Cada objeto pode armazenar valores diferentes nelas.

Os **métodos** são funções definidas dentro da classe e descrevem seus comportamentos. Por exemplo, `getTipo()` interpreta o código armazenado em `$tipo` e retorna uma descrição legível.

O prefixo `public` permite acessar o atributo ou método a partir de qualquer parte do programa.

## Construtor e criação de objetos

O método `__construct()` é executado automaticamente quando um objeto é criado com `new`.

```php
$carro = new carro(2019, "Ford", "Ranger", "combustão", "2020", 2);
```

Esse processo cria um objeto da classe `carro` e envia os valores ao construtor. Dentro da classe, `$this` representa o objeto que está sendo criado ou utilizado.

O construtor de `Veiculo` valida o tipo antes de inicializar os atributos:

- `mc`: motor a combustão;
- `me`: motor elétrico;
- `nm`: não motorizado.

Se o tipo não estiver entre as opções válidas, o código lança uma `InvalidArgumentException`.

## Namespace

O código utiliza o namespace `Veiculos`:

```php
namespace Veiculos;
```

Namespaces evitam conflitos entre nomes de classes. A aplicação importa as classes com `use`:

```php
use Veiculos\bicicleta;
use Veiculos\carro;
```

O arquivo `veiculo.php` é carregado em `index.php` com `require_once`, garantindo que ele seja incluído uma única vez.

## Herança

Herança permite que uma classe filha reutilize a estrutura e os comportamentos de uma classe pai.

```php
class carro extends Veiculo
```

```php
class bicicleta extends Veiculo
```

Assim, `carro` e `bicicleta` herdam atributos como `$marca`, `$modelo` e `$tipo`.

Dentro dos construtores das classes filhas, `parent::__construct()` chama o construtor da classe `Veiculo` antes de definir os atributos próprios.

## Especialização e polimorfismo

Cada classe filha possui atributos próprios:

- `carro`: ano do modelo e número de portas;
- `bicicleta`: número de marchas.

As duas classes também possuem um método `apresenta()`. Esse método tem o mesmo nome, mas apresenta a mensagem de uma forma diferente para cada tipo de objeto:

- `carro->apresenta()` apresenta as informações de um carro;
- `bicicleta->apresenta()` apresenta as informações de uma bicicleta.

Isso é um exemplo didático de **polimorfismo**: objetos de classes relacionadas podem oferecer comportamentos específicos por meio de uma interface comum.

## Fluxo de execução

Em `index.php`:

1. O código importa `veiculo.php`.
2. As classes `carro` e `bicicleta` são utilizadas.
3. Um objeto `carro` é criado.
4. Um objeto `bicicleta` é criado.
5. O método `apresenta()` de cada objeto exibe suas informações no navegador.

## Resumo

- Classe: modelo ou estrutura.
- Objeto: instância criada a partir de uma classe.
- Atributo: dado armazenado pelo objeto.
- Método: comportamento executado pelo objeto.
- Construtor: inicializa o objeto.
- Herança: reutilização e especialização de uma classe.
- Polimorfismo: comportamentos específicos relacionados por meio de classes.

---

Autor: **Prof. M.e Sandro Alencar Fernandes**  
E-mail: **[sandroaf@unidavi.edu.br](mailto:sandroaf@unidavi.edu.br)**