<?php

class Product
{

    protected $nome;
    protected $categoria;
    protected $descrizione;
    protected $prezzo;
    protected $img;

    public function __construct()
    {
    }

    // Getter & Setter

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**

     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     *
     *
     * @return  self
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * 
     *
     * @return  self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * 
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }
}
