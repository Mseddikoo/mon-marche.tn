<?php

namespace Ecommerce\EcommerceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class FacturesCommand
 * @package Ecommerce\EcommerceBundle\Command
 */
class FacturesCommand extends ContainerAwareCommand
{
    /**
     * configuration le commande
     */
    protected function configure()
    {
        $this->setName('ecommerce:facture')
            ->setDescription('Commande pour enregistrer les factures à partir de la date indiquée ')
            ->addArgument('date', InputArgument::OPTIONAL, 'Date pour laquel vous souhaitez recuperer les factures');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output){
        $date = new \DateTime();

        $em = $this->getContainer()->get('doctrine')->getManager();
        $factures = $em->getRepository('EcommerceBundle:Commandes')->byDateCommand($input->getArgument('date'));

        $output->writeln(count($factures).' factur(s).');

        if(count($factures) > 0){
            $dir = $date->format('d-m-Y h:i:s');
            mkdir('facturation/'.$dir);
            foreach($factures as $facture){
        $this->getContainer()->get('setNewFacture')->facture($facture)
            ->Output('facturation/'.$dir.'/facture'.$facture->getReference().'.pdf','F');

        }
    }
    }
}
