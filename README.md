# Oscillator Interface

## Abstract for oscillator driven systems

## Abstract types

### Bistable Oscillator

Bistable multivibrator with 2 stable states. Commonly implemented as concrete boolean value:
```php
declare(strict_types=1);

namespace Dszczer\Oscillator;

use Dszczer\Oscillator\BistableOscillatorInterface;

final class BistableOscillator implements BistableOscillatorInterface
{
    private $oscillatorState = false;

    /**
     * @inheritDoc
     */
    public function getOscillatorState(): bool
    {
        return $this->oscillatorState;
    }

    /**
     * @inheritDoc
     */
    public function tick(): void
    {
        $this->oscillatorState = !$this->oscillatorState;
    }
}
```
