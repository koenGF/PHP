<?php
class Radioprogramma
{
    private $programmanaam = "";
    private $omschrijving = "";
    private $liedjes = [];



    /**
     * @param string $programmanaam
     */
    public function setProgrammanaam(string $programmanaam): void
    {
        $this->programmanaam = $programmanaam;
    }

    /**
     * @param string $omschrijving
     */
    public function setOmschrijving(string $omschrijving): void
    {
        $this->omschrijving = $omschrijving;
    }

    /**
     * @return array
     */
    public function getProgramma(): array
    {
        return array(
            $this->programmanaam,
            $this->omschrijving
        );
    }

    /**
     * @return array
     */
    public function getLiedjes(): array
    {
        return $this->liedjes;
    }

    /**
     * @param array $liedjes
     */
    public function setLiedjes(array $liedjes): void
    {
        $this->liedjes = $liedjes;
    }


}