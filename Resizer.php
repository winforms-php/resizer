<?php

namespace VoidEngine;

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * @package     Resizer
 * @copyright   2019 Podvirnyy Nikita (KRypt0n_)
 * @license     GNU GPLv3 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @license     Enfesto Studio Group license <https://vk.com/topic-113350174_36400959>
 * @author      Podvirnyy Nikita (KRypt0n_)
 * 
 * Contacts:
 *
 * Email: <suimin.tu.mu.ga.mi@gmail.com>
 * VK:    vk.com/technomindlp
 *        vk.com/hphp_convertation
 * 
 */

function resize (NetObject $object, array $config = []): Timer
{
    $config['speed'] ??= 0.3;

    return setTimer (10, function ($self) use ($object, $config)
    {
        $finished = 0;

        foreach (['x', 'y', 'w', 'h'] as $dimension)
            if (isset ($config[$dimension]))
            {
                $object->$dimension += ceil ($config['speed'] * ($config[$dimension] - $object->$dimension));

                if ($object->$dimension == $config[$dimension])
                    ++$finished;
            }

            else ++$finished;

        if ($finished == 4)
        {
            $self->stop ();

            if (isset ($config['callable']))
                $config['callable'] ($object);
        }
    });
}
