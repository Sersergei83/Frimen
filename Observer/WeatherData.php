<?php


class WeatherData implements Subjecr
{
    private array $observers=[];
    private float $temperature;
    private float $humidity;
    private  float $pressure;
    public function RegisterObserver(Observer $observer): void
    {
        // TODO: Implement RegisterObserver() method.
        $this->observers[]=$observer;
    }
    public function RemoveObserver(Observer $observer): void
    {
        // TODO: Implement RemoveObserver() method.
        $key=array_search($observer,$this->observers);
        if ($key !==false)
        {
            unset($this->observers[$key]);
        }

    }
    public function NotifyObservers(): void
    {
        // TODO: Implement NotifyObservers() method.
        foreach ($this->observers as $observer)
        {
            $observer->Update($this->temperature, $this->humidity,$this->pressure);
        }
    }

    private function measurementsChanged()
    {

        $this->NotifyObservers();
    }
    public function SetMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature=$temperature;
        $this->humidity=$humidity;
        $this->pressure=$pressure;
        $this->measurementsChanged();
    }
}