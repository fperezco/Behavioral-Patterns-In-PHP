<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\AbstractClasses;


use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Interfaces\FlyBehaviour;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Interfaces\QuackBehaviour;

/**
 * Class Duck
 * An ParentClass class to extend which have common method to implement by
 * an specific way and custom behaviour to select in the child classes
 * but rehusing this behaviours instead or re-implementing or copy-paste
 * code
 *
 * ES:
 * En este caso tenemos una clase padre abstracta con metodos comunes
 * y otra serie de métodos y atributos que, a pesar de ser compartidos por
 * muchas clases hijas no son comunes a todas, con este patrón de delegar
 * los comportamientos especificos en interfaces y obligar a setearlos
 * en la clases hijas, logramos esta flexibilidad multicomportamiento (composición) y a la
 * vez no duplicar codigo ya que clases distintas pueden implementar comportamientos
 * similares mediante interfaces
 */
abstract class Duck
{
    //Behaviours
    /**
     * @var FlyBehaviour
     */
    private $flyBehaviour;
    /**
     * @var QuackBehaviour
     */
    private $quackBehaviour;


    /**
     * Set my fly behaviour
     * @param FlyBehaviour $flyBehaviour
     */
    public function setFlyBehaviour(FlyBehaviour $flyBehaviour){
        $this->flyBehaviour=$flyBehaviour;
    }

    /**
     * Set my quack behaviour
     * @param QuackBehaviour $qBehaviour
     */
    public function setQuackBehaviour(QuackBehaviour $qBehaviour){
        $this->quackBehaviour=$qBehaviour;
    }

    /**
     * Every duck must implement its display function
     */
    public abstract function display();

    /**
     * Common implementation because all ducks swim by the same way
     * swim by the same way
     */
    public function swim(){
       return "All ducks swim!! I'm a duck that is swimming";
    }

    /**
     * Custom implementation to be customized by any child class
     */
    public function fly(){
        return $this->flyBehaviour->fly();
    }

    /**
     * Custom implementation to be customized by any child class
     */
    public function quack(){
        return $this->quackBehaviour->quack();
    }




}
