<?php

/**
    Интерфейс для моделей и контроллеров
 */
interface mustFunk
{
    /**
     * Функция для создания файлов
     */
    static public function create(string $name);

    /**
     * Функция для удаления файлов
     */
    static public function delete(string $name);
}