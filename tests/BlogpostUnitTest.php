<?php


namespace App\Tests;

use App\Entity\Blogpost;
use PHPUnit\Framework\TestCase;


class BlogpostUnitTest extends TestCase
{
   public function testIsTrue()
                {
                    $blogpost = new Blogpost();
                   

                    $blogpost->setTitre('titre')
                            ->setContenu('contenu')
                            ->setSlug('slug');
                            

                    $this->assertEquals('titre', $blogpost->getTitre());
                    $this->assertEquals('contenu', $blogpost->getContenu());
                    $this->assertEquals('slug', $blogpost->getSlug());
                 
                  
                }

                 public function testIsFalse()
                {
                    $blogpost = new Blogpost();
               

                       $blogpost->setTitre('titre')
                                ->setContenu('contenu')
                                ->setSlug('slug');
                             

                    $this->assertNotEquals('wrong_titre', $blogpost->getTitre());
                    $this->assertNotEquals('wrong_content', $blogpost->getContenu());
                    $this->assertNotEquals('wrong_slug', $blogpost->getSlug());
                                   
                }

                 public function testIsEmpty()
                {
                   $blogpost = new Blogpost();

                        $this->assertNull($blogpost->getTitre());
                        $this->assertNull($blogpost->getContenu());
                        $this->assertNull($blogpost->getSlug());
                        
                }

}
