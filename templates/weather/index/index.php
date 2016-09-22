<?php $this->layout('layout', ['title' => 'Главная страница']) ?>

<?php
echo '<table class="table">';
echo '<tr><td>Время</td><td>Температура</td>';
foreach ($data as $key => $value) {
    echo '<tr><td>' . $key . '</td><td>' . $value->getTemperature() . '</td></tr>';
}
echo '</table>';