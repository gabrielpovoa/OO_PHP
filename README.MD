**********CLASSES/OBJECTS ON PHP**********
//CLASS

````
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}

//We'll be creating our class and inserting our varibles with public params to access from anywhere on the code.

````

// OBJECT

````
$post1 = new Post();
$post1-> likes = 10;


$post2 = new Post();
$post2 -> likes = 3;

````


## Methods and Props
1. Propriedades: Características que uma classe vai ter; por consequência, quando o objeto for criado ele também terá estas características.
1.1 Tipos de propriedades: No exemplo acima, criamos uma pública que pode ser acessada de fora da classe, ser alterada. Também temos as protegidas e privadas que por sua vez, não são acessíveis por fora.
2. Métodos: Criamos ele dentro da classe. Para acessar nossas propriedades, usamos o ````this->```` que se refere a onde ele esta inserido. Exemplo:

````
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;

    public function increaseLikes() {
        this->likes;
    }
}
Para acessar no objeto
$post1 = new Post();
$post1->increseLikes();

````NOTE:  O this aqui, se refere ao post1;````

````

## Constructor Method
É usado sempre que precisamos executar algo quando a classe é criada; Um dos casos de uso é pra definir as propriedades iniciais de um objeto;

````
class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct($qtLikes)
    {
        $this->likes = $qtLikes;
    } 

    public function increseLikes () 
    {
        echo "abc";
        $this->likes++;
    }
}

$post1 = new Post( 25 );

// Neste exemplo, passamos nossa quantidade de likes por parâmetro e executa-mo-la no contrutor.
````

## Encapsulamento
Protejer de acessos externos e de modificação desnecessária que podem prejudicar o funcionamento do objeto. SETTER E GET SÃO SINÔNIMOS;



******************************************