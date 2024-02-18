<?php

/**
 * TRAIT
 *
 * A trait is a group of methods that can be used in a class.
 * A trait can be used in multiple classes.
 * A trait can be used in a class using the "use" keyword.
 */
trait hasWheel {
    public function wheels() {
        echo "The car has 4 wheels<br>";
    }
}

/**
 * IMPLEMENTATION OF TRAIT
 */
class BMW {
    use hasWheel;

    public function wheels()
    {
        return $this->wheels();
    }
}

/**
 * Another implementation on a trait
 */
class Mercedes {
    use hasWheel;

    public function wheels()
    {
        return $this->wheels();
    }
}

/**
 * Again, another implementation on a trait
 */
class Toyota {
    use hasWheel;

    public function wheels()
    {
        return $this->wheels();
    }
}
