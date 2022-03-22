<?php

namespace Source\Model;

class Produto
{
private $NomeProduto;

private $sku;

private $foto;

private  $preço;

private $estoque;



    /**
     * @return mixed
     */
    public function getNomeProduto()
    {
        return $this->NomeProduto;
    }

    /**
     * @param mixed $NomeProduto
     */
    public function setNomeProduto($NomeProduto)
    {
        $this->NomeProduto = $NomeProduto;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getPreço()
    {
        return $this->preço;
    }

    /**
     * @param mixed $preço
     */
    public function setPreço($preço)
    {
        $this->preço = $preço;
    }

    /**
     * @return mixed
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param mixed $estoque
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }


}