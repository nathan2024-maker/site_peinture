<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUniTest extends TestCase
{
        public function testIsTrue()
                {
                    $user = new User();

                    $user->setEmail('kodjo@test.com')
                        ->setPrenom('prenom')
                        ->setNom('nom')
                        ->setPassword('password')
                        ->setAPropos('apropos')
                        ->setTelephone('telephone')
                        ->setInstagram('instagram');

                    $this->assertEquals('kodjo@test.com', $user->getEmail());
                    $this->assertEquals('prenom', $user->getPrenom());
                    $this->assertEquals('nom', $user->getNom());
                    $this->assertEquals('password', $user->getPassword());
                    $this->assertEquals('apropos', $user->getAPropos());
                    $this->assertEquals('telephone', $user->getTelephone());
                    $this->assertEquals('instagram', $user->getInstagram());
                }

                 public function testIsFalse()
                {
                    $user = new User();
                    $user->setEmail('kodjo@test.com')
                        ->setPrenom('prenom')
                        ->setNom('nom')
                        ->setPassword('password')
                        ->setAPropos('apropos')
                        ->setTelephone('telephone')
                        ->setInstagram('instagram');

                    $this->assertNotEquals('wrong@example.com', $user->getEmail());
                    $this->assertNotEquals('false', $user->getPrenom());
                    $this->assertNotEquals('false', $user->getNom());
                    $this->assertNotEquals('false', $user->getPassword());
                    $this->assertNotEquals('false', $user->getAPropos());
                    $this->assertNotEquals('false', $user->getTelephone());
                    $this->assertNotEquals('false', $user->getInstagram());
                }

                 public function testIsEmpty()
                {
                   $user = new User();

                        $this->assertNull($user->getEmail()); // Assuming default value is null
                        $this->assertNull($user->getPrenom());
                        $this->assertNull($user->getNom());
                        $this->assertNull($user->getPassword());
                        $this->assertNull($user->getAPropos());
                        $this->assertNull($user->getTelephone());
                        $this->assertNull($user->getInstagram());
                }





}
