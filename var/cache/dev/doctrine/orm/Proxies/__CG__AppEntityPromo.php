<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Promo extends \App\Entity\Promo implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'category' => [parent::class, 'category', null],
        "\0".parent::class."\0".'date_debut' => [parent::class, 'date_debut', null],
        "\0".parent::class."\0".'date_fin' => [parent::class, 'date_fin', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'idproduct' => [parent::class, 'idproduct', null],
        "\0".parent::class."\0".'images' => [parent::class, 'images', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'paniers' => [parent::class, 'paniers', null],
        "\0".parent::class."\0".'price' => [parent::class, 'price', null],
        "\0".parent::class."\0".'priceafterpromo' => [parent::class, 'priceafterpromo', null],
        "\0".parent::class."\0".'quantity' => [parent::class, 'quantity', null],
        "\0".parent::class."\0".'reduction' => [parent::class, 'reduction', null],
        'category' => [parent::class, 'category', null],
        'date_debut' => [parent::class, 'date_debut', null],
        'date_fin' => [parent::class, 'date_fin', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'idproduct' => [parent::class, 'idproduct', null],
        'images' => [parent::class, 'images', null],
        'name' => [parent::class, 'name', null],
        'paniers' => [parent::class, 'paniers', null],
        'price' => [parent::class, 'price', null],
        'priceafterpromo' => [parent::class, 'priceafterpromo', null],
        'quantity' => [parent::class, 'quantity', null],
        'reduction' => [parent::class, 'reduction', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}