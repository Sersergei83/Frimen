<?php


class ForecastDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private Subjecr $werherData;

    public function __construct(Subjecr $werherData)
    {
        $this->werherData = $werherData;
        $this->werherData->RegisterObserver($this);
    }

    public function Update(float $temp, float $humidity, float $pressure): void
    {
        // TODO: Implement Update() method.
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->Display();
    }

    public function Display(): void
    {
        // TODO: Implement Display() method.
        print("Прогнозные условия " . $this->temperature . "C " . $this->humidity . "% \n");
    }
}