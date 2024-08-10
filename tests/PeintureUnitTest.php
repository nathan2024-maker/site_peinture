<?php

namespace App\Tests;

use App\Entity\Peinture;
use App\Entity\User;
use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;
use DateTime;

class PeintureTest extends TestCase
{
    public function testIsTrue()
    {
        $peinture = new Peinture();

        // Création d'une instance de User et Categorie pour les relations
        $user = new User();
        $categorie = new Categorie();

        // Définir des valeurs
        $nom = 'Mona Lisa';
        $largeur = '77.00';
        $hauteur = '53.00';
        $enVente = true;
        $prix = '1000.00';
        $dateRealisation = new DateTime('1503-01-01');
        $createdAt = new DateTime();
        $description = 'Un célèbre portrait de Léonard de Vinci.';
        $portfolio = true;
        $slug = 'mona-lisa';
        $file = 'mona-lisa.jpg';

        // Définir les valeurs via les setters
        $peinture->setNom($nom)
                 ->setLargeur($largeur)
                 ->setHauteur($hauteur)
                 ->setEnVente($enVente)
                 ->setPrix($prix)
                 ->setDateRealisation($dateRealisation)
                 ->setCreatedAt($createdAt)
                 ->setDescription($description)
                 ->setPortfolio($portfolio)
                 ->setSlug($slug)
                 ->setFile($file)
                 ->setUser($user)
                 ->addCategorie($categorie);

        // Assertions pour vérifier que les getters renvoient les bonnes valeurs
        $this->assertEquals($nom, $peinture->getNom());
        $this->assertEquals($largeur, $peinture->getLargeur());
        $this->assertEquals($hauteur, $peinture->getHauteur());
        $this->assertTrue($peinture->isEnVente());
        $this->assertEquals($prix, $peinture->getPrix());
        $this->assertEquals($dateRealisation, $peinture->getDateRealisation());
        $this->assertEquals($createdAt, $peinture->getCreatedAt());
        $this->assertEquals($description, $peinture->getDescription());
        $this->assertTrue($peinture->isPortfolio());
        $this->assertEquals($slug, $peinture->getSlug());
        $this->assertEquals($file, $peinture->getFile());
        $this->assertEquals($user, $peinture->getUser());
        $this->assertCount(1, $peinture->getCategorie());
    }

    public function testIsFalse()
    {
        $peinture = new Peinture();

        // Définir des valeurs correctes pour les setters
        $peinture->setNom('Mona Lisa')
                 ->setLargeur('77.00')
                 ->setHauteur('53.00')
                 ->setEnVente(true)
                 ->setPrix('1000.00')
                 ->setDateRealisation(new DateTime('1503-01-01'))
                 ->setCreatedAt(new DateTime())
                 ->setDescription('Un célèbre portrait de Léonard de Vinci.')
                 ->setPortfolio(true)
                 ->setSlug('mona-lisa')
                 ->setFile('mona-lisa.jpg');

        // Assertions pour vérifier que les valeurs incorrectes ne sont pas égales aux valeurs correctes
        $this->assertNotEquals('Wrong Name', $peinture->getNom());
        $this->assertNotEquals('0.00', $peinture->getLargeur());
        $this->assertNotEquals('0.00', $peinture->getHauteur());
        $this->assertFalse($peinture->isEnVente() === false);
        $this->assertNotEquals('0.00', $peinture->getPrix());
        $this->assertNotEquals(new DateTime('2000-01-01'), $peinture->getDateRealisation());
        $this->assertNotEquals(new DateTime('2000-01-01'), $peinture->getCreatedAt());
        $this->assertNotEquals('Wrong Description', $peinture->getDescription());
        $this->assertFalse($peinture->isPortfolio() === false);
        $this->assertNotEquals('wrong-slug', $peinture->getSlug());
        $this->assertNotEquals('wrong-file.jpg', $peinture->getFile());
    }

    public function testIsEmpty()
    {
        $peinture = new Peinture();

        // Assertions pour vérifier que les valeurs par défaut sont nulles ou vides
        $this->assertNull($peinture->getNom()); // Default value should be null
        $this->assertNull($peinture->getLargeur());
        $this->assertNull($peinture->getHauteur());
        $this->assertNull($peinture->isEnVente()); // Default value should be null
        $this->assertNull($peinture->getPrix());
        $this->assertNull($peinture->getDateRealisation());
        $this->assertNull($peinture->getCreatedAt()); // Default value should be null
        $this->assertNull($peinture->getDescription());
        $this->assertNull($peinture->isPortfolio()); // Default value should be null
        $this->assertNull($peinture->getSlug());
        $this->assertNull($peinture->getFile());
        $this->assertNull($peinture->getUser());
        $this->assertEmpty($peinture->getCategorie()); // Default value should be empty
    }
}

