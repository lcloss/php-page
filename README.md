# php-page

PHP Page é um pacote simples para uso de um *Template System*.<br> 
Ele funciona com o sistema de template RainTpl.

## Início rápido

As instruções abaixo permitem usar o pacote rapidamente no seu projeto PHP.

### Pré requisitos

Um sistema em PHP.

### Instalação

Instale usando o Composer (recomendado):

```
composer require lcloss/php-page
```

Em alternativa, clone o repositório para uma pasta do seu projeto:

```
git clone https://github.com/lcloss/php-page.git
```

## Testando o pacote

### Configuração inicial

A pasta *default* para as views é a `app/views/front`. Poderá mudar isso na constante `VIEW_DIR`, da classe `Page.php`.<br>
Tenha em atenção que são criadas 2 sub-pastas: `src` e `cache`.


In the view folder of your system, create the header.html and footer.html file.
For this example, also create the home.html file.

At the end you will have a structure like:

```
app/views/front/src/footer.html
app/views/front/src/header.html
app/views/front/src/home.html
```

In your application, use:

```
use \LCloss\Page\Page;

$page = new Page();
$page->setTpl('home', [
	'title'	 => 'Title of your Project',
	'company' => 'Your company',
]);
```

### Creating a template

Create a template called hello.html in your views folder.
Type the following code:

```
<p>Hello {$username}!</p>
```

Use as follow:

```
use \LCloss\Page\Page;

$page = new Page();
$page->setTpl('hello', [
	'username'	 => 'Frederico Ferdinando',
]);
```

You will see like this:

```
Hello Frederico Ferdinando!
```

## Built With

* [RainTpl](https://github.com/feulf/raintpl3) - The template system used

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [GitHub](https://github.com/) for versioning. For the versions available, see the [tags on this repository](https://github.com/lcloss/php-page/tags). 

## Authors

* **Luciano Closs** - *Initial work* - [LCloss](https://github.com/lcloss)

See also the list of [contributors](https://github.com/lcloss/php-page/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* This project was inspired by the [Curso Completo de PHP 7](https://www.udemy.com/curso-php-7-online/) from [HCode](https://www.hcode.com.br/)
* This README.md was build from [PurpleBooth README Template](https://gist.github.com/PurpleBooth/109311bb0361f32d87a2)
