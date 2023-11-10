<?php


abstract class Duck
{
    protected FlyBehavior $flyBehavior;
    protected  QuackBehavor $quackBehavor;
    public function performQuack(){
    $this->quackBehavor->Quack();
}

    public function Swim()
    {
    print_r("Все утки плавают, даже манки");
}

    public function perfomFly()
    {
        $this->flyBehavior->Fly();
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavor $quackBehavor
     */
    public function setQuackBehavor(QuackBehavor $quackBehavor): void
    {
        $this->quackBehavor = $quackBehavor;
    }
    abstract public function Display();
}