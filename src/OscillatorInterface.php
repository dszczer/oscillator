<?php

/*
 * Copyright © Damian Szczerbiński <kodkod.damian.szczerbinski@gmail.com>
 */

declare(strict_types=1);

namespace Dszczer\Oscillator;

/**
 * @author Damian Szczerbiński <kodkod.damian.szczerbinski@gmail.com>
 */
interface OscillatorInterface
{
    /**
     * Ticks the oscillator.
     */
    public function tick(): void;
}
