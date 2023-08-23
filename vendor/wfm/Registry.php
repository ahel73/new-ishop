<?php
// экземпляр класса инииазруетсчя как синглотон в Арр
// хранятся настройки и иные данные необходимые для обработки запроса


namespace wfm;


class Registry
{

    use TSingleton;

    protected static array $properties = []; // Сюда складываемм данные для приложения

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        return self::$properties[$name] ?? null;
    }

    public function getProperties(): array
    {
        return self::$properties;
    }

}
