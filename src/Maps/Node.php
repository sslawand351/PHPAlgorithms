<?php
/**
 * MIT License
 *
 * Copyright (c) 2018 Dogan Ucar, <dogan@dogan-ucar.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace doganoo\PHPAlgorithms\Maps;


/**
 * Node class that contains a key, value and the next instance.
 *
 * Class Node
 *
 * @package doganoo\PHPAlgorithms\Maps
 */
class Node {
    private $value = 0;
    private $key;
    private $next = null;
    private $previous = null;

    /**
     * returns the key
     *
     * @return mixed
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * sets the nodes key. The key has to be a scalar type otherwise the method throws an InvalidKeyTypeException.
     *
     * @param int $key
     */
    public function setKey(int $key) {
        $this->key = $key;
    }

    /**
     * returns the value
     *
     * @return int
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * sets the nodes value
     *
     * @param $value
     */
    public function setValue($value) {
        $this->value = $value;
    }

    /**
     * counts the number of nodes
     *
     * @return int
     */
    public function size() {
        /** @var Node $node */
        $node = $this->next;
        $size = 1;

        while ($node !== null) {
            $size++;
            $node = $node->getNext();
        }
        return $size;
    }

    /**
     * returns the next node
     *
     * @return Node|null
     */
    public function getNext(): ?Node {
        return $this->next;
    }

    /**
     * sets the next node
     *
     * @param Node|null $node
     */
    public function setNext(?Node $node) {
        $this->next = $node;
    }

    /**
     * returns the previous node
     *
     * @return Node|null
     */
    public function getPrevious(): ?Node {
        return $this->previous;
    }

    /**
     * sets the previous node
     *
     * @param Node|null $node
     */
    public function setPrevious(?Node $node) {
        $this->previous = $node;
    }

    /**
     * string representation of a Node instance
     *
     * @return string
     */
    public function __toString() {
        $previous = $this->previous === null ? "" : $this->previous->getKey();
        $next = $this->next === null ? "" : $this->next->getKey();
        return "[#key#][#{$this->key}#][#value#][#{$this->value}#][#previous#][#$previous#][#next#][#$next#]";
    }
}