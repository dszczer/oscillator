<?php

/*
 * Copyright © Damian Szczerbiński <kodkod.damian.szczerbinski@gmail.com>
 */

declare(strict_types=1);

namespace Dszczer\Oscillator;

/**
 * @author Damian Szczerbiński <kodkod.damian.szczerbinski@gmail.com>
 */
interface BistableOscillatorInterface extends OscillatorInterface
{
    /**
     * Get current state.
     */
    public function getOscillatorState(): bool;
}
