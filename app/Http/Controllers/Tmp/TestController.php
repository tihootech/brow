<?php

namespace App\Http\Controllers\Tmp;
use App\Http\Controllers\Controller;
use Faker\Factory as FakerFactory;
// use Illuminate\Http\Request;

class TestController extends Controller
{
    public function fakerTest(){

        $methods = [
            'name' => 5,
            'title' => 20,
            'ipv4' => 2,
            'ipv6' => 2,
            'text' => 1,
            'address' => 1,
            'city' => 5,
            'country' => 5,
            'word' => 5,
            'randomDigit' => 5,
            'e164PhoneNumber' => 5,
            'catchPhrase' => 5,
            'company' => 5,
            'jobTitle' => 5,
            'tld' => 5,
            'hexColor' => 5,
            'emoji' => 25,
        ];

        foreach ($methods as $method => $count) {
            for ($i = 0; $i < $count; $i++) {
                $fakes[$method][] = fake()->$method();
            }
            $fakes[$method] = implode(' - ', $fakes[$method]);
        }

        $faker = FakerFactory::create();

        $image = $faker->imageUrl(640, 480, 'animals', true);
        echo "<img src='$image' />";

        dd($fakes, $faker->creditCardNumber('Visa', true), $image);

    }
}
