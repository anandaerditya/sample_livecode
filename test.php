<?php
// Test 1
class Hobbies
{
    private array $hobbies = [];

    public function add(string $hobbyist, array $hobbies) : void
    {
        $this->hobbies[$hobbyist] = $hobbies;
    }

    public function findAllHobbyists(string $hobby) : array
    {
        $result = [];
        foreach ($this->hobbies as $key => $item) {
            $find = array_search($hobby, $item);
            if ($find) {
                $result[$key] = $find;
            }
        }

        return $result;
    }
}

$hobbies = new Hobbies;
$hobbies->add('Steve', ['Fashion', 'Piano', 'Reading']);
$hobbies->add('Patty', ['Drama', 'Magic', 'Pets']);
$hobbies->add('Chad', ['Puzzles', 'Pets', 'Yoga']);
echo implode(',', $hobbies->findAllHobbyists('Yoga'));


function sortByPriceAscending(string $jsonString)
{
    // Yоur cоdе gоеs hеrе
    $json = json_encode($jsonString);

    return $json;
}

echo sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]');



function findLastKey(array $array, $value)
{
    $data = array_search($value, $array);

    return $data;
}

echo findLastKey(array('Hello' => 'Green', 'World' => 'Blue'), 'Blue');


function validate(string $username) : bool
{
    $stack = '/^[a-z]_[A-Za-z0-9].\-+$/i';
    $stack_orig = '/^[a-z0-9_A-Za-z.\-]+$/i';
    $stack_orig3 = '/([A-Z0-9\_])\w+/i';
    $stack_orig4 = '([A-Z0-9\_])\w+';

    $stack_correct = '/([A-Za-z]+_+[A-Za-z0-9]+\_)/i';
    $preg = preg_match('/^[A-Za-z0-9_A-Za-z0-9 .\-]+$/i', $username);
    if (strlen($username) >= 4 and $preg) {
        return true;
    }

    return false;
}

echo validate('Mike_Standish') ? 'Valid' : 'Invalid'; #Valid username
echo "\n";
echo validate('Mike Standish') ? 'Valid' : 'Invalid'; #Invalid username