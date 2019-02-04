<?php

function presentPrice($price) {
    return number_format($price, 0, ",", " ").' ₸';
}
