/* Comentário *//* Variável Booleana */$bool_ex = true;/* Variável string */$str_ex = "olá";/* Variável int */$int_ex = 123;/* Variável Float */$float_ex = 134.67;/* Condicional */if($int_ex == 123) {echo($int_ex . PHP_EOL);}else {echo('int não encontrado. PHP_EOL');}/* classe */class Mamifero{public function __construct($idade){$this->idade = $idade;}public function vc_anda(){return true;}}/* Criar classe */$Cachorro = new Mamifero(20);echo($Cachorro->vc_anda() . PHP_EOL);
    } catch (Exception $e) {
        echo "erro na compilação, caso dúvidas, contate o email " . CompileException::AdminMail();
    } catch (DivisaoPorZero $e) {
        echo "Erro de divisão por zero, caso dúvidas, contate o email" . CompileException::AdminMail();
    }
    