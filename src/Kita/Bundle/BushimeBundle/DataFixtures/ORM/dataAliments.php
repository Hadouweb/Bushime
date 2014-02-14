<?php
namespace Kita\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kita\BlogBundle\Entity\Aliments;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class dataAliments extends AbstractFixture implements ContainerAwareInterface
{

    /** @var  ContainerInterface */
    private $container;
    
    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {

        $file = __DIR__ ."/../files/aliments.sql";
        $sql = file_get_contents($file);
        /* @var $em EntityManager */
        $em = $this->container->get('doctrine.orm.entity_manager');
        $em->getConnection()->executeQuery($sql);

    }
  
}