<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue()
                {
                    $commentaire = new Commentaire();
                    $createdAt = new DateTime();
                    $blogpost = new Blogpost();
                    $peinture = new Peinture();
                   

                    $commentaire->setAuteur('auteur')
                                ->setEmail('email')
                                ->setContenu('contenu')
                                ->setCreatedAt($createdAt)
                                ->setBlogpost($blogpost)
                                ->setPeinture($peinture);

                            

                    $this->assertEquals('auteur', $commentaire->getAuteur());
                    $this->assertEquals('email', $commentaire->getEmail());
                    $this->assertEquals('contenu', $commentaire->getContenu());
                    $this->assertEquals($createdAt, $commentaire->getCreatedAt());
                    $this->assertSame($blogpost, $commentaire->getBlogpost());
                    $this->assertSame($peinture, $commentaire->getPeinture());
                 
                  
                }

                 public function testIsFalse()
                {
                    $commentaire = new Commentaire();
                    $createdAt = new DateTime();
                    $blogpost = new Blogpost();
                    $peinture = new Peinture();
                   

                    $commentaire->setAuteur('auteur')
                                ->setEmail('email')
                                ->setContenu('contenu')
                                ->setCreatedAt($createdAt)
                                ->setBlogpost($blogpost)
                                ->setPeinture($peinture);
                                

                    $this->assertNotEquals('wront_auteur', $commentaire->getAuteur());
                    $this->assertNotEquals('wrong_mail', $commentaire->getEmail());
                    $this->assertNotEquals('wrong_contenu', $commentaire->getAuteur());
                    $this->assertNotEquals(new DateTime(), $commentaire->getCreatedAt());
                    $this->assertNotSame(new Blogpost(), $commentaire->getBlogpost());
                    $this->assertNotSame(new Peinture(), $commentaire->getPeinture());
                                   
                }

                 public function testIsEmpty()
                {
                   $commentaire = new Commentaire();

                        $this->assertNull($commentaire->getAuteur());
                        $this->assertNull($commentaire->getEmail());
                        $this->assertNull($commentaire->getContenu());
                        $this->assertNull($commentaire->getCreatedAt());
                        $this->assertNull($commentaire->getBlogpost());
                        $this->assertNull($commentaire->getPeinture());
                        
                        
                }

}
