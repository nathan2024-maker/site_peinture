<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
   public function testIsTrue()
                {
                    $categorie = new Categorie();

                    $categorie->setNom('nom')
                        ->setDescription('descrition')
                        ->setSlug('slug');

                    $this->assertEquals('nom', $categorie->getNom());
                    $this->assertEquals('descrition', $categorie->getDescription());
                    $this->assertEquals('slug', $categorie->getSlug());
                  
                }

                 public function testIsFalse()
                {
                    $categorie = new Categorie();

                       $categorie->setNom('nom')
                                 ->setDescription('descrition')
                                  ->setSlug('slug');

                    $this->assertNotEquals('false', $categorie->getNom());
                    $this->assertNotEquals('false', $categorie->getDescription());
                    $this->assertNotEquals('false', $categorie->getSlug());
                    
                }

                 public function testIsEmpty()
                {
                   $categorie = new Categorie();

                        $this->assertNull($categorie->getNom());
                        $this->assertNull($categorie->getDescription());
                        $this->assertNull($categorie->getSlug());
                }





}
