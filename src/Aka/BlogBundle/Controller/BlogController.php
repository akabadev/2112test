<?php
// src/Aka/BlogBundle/Controller/BlogController.php

namespace Aka\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;


		class BlogController extends Controller
		{
		  public function indexAction($page)
			{
		       $articles = array(
					array('titre' => 'Brexit aftermath on economy !', 'id'
					=> 1, 'auteur' => 'corbyn', 'contenu' => 'It\'s too early 
					to forecast. Blabla…', 'date' => new \Datetime()),
					array('titre' => 'BFG new movie in theatre this week', 'id'
					=> 2, 'auteur' => 'abdou', 'contenu' => 'the new Spielberg movie  
					J. Blabla…', 'date' => new \Datetime()),
					array('titre' => '2112 communication launch in new website', 'id'
					=> 3, 'auteur' => 'kristy', 'contenu' => 'Brand new website 
					Blabla…', 'date' => new \Datetime())
					);

						// render the view	with variables	
					   return $this->render('AkaBlogBundle:Blog:index.html.twig',
					   array(
					     'articles' => $articles
					));
				
	    	}
				
				
		  public function voirAction($id)
			{
		
			$article = array(
			'id' => 1,
			'titre' => 'My last trip to Japan  !',
			'auteur' => 'dave',
			'contenu' => 'I did have a lots fun with my friends in tokyo...BlaBlah',
			'date' => new \Datetime()
              );
			  
				return $this->render('AkaBlogBundle:Blog:voir.html.twig', array(
					'article' => $article
					));


			}
			
		  public function ajouterAction()
			{
				
				
				if( $this->get('request')->getMethod() == 'POST' )
					
				
			     {
					
				
					
						$this->get('session')->getFlashBag()->add('notice', 'Article
						bien enregistré');
						
						
					
					return $this->redirect( $this->generateUrl('sdzblog_voir',
					array('id' => 5)) );
				  }
				  // if not POST we show the form
					
					return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
			 }
			 
         
		     public function modifierAction($id)
			{
			
			$article = array(
			'id' => 1,
			'titre' => 'New place to go out this week-end !',
			'auteur' => 'joel',
			'contenu' => 'Soho is the new place to be . Blabla…',
			'date' => new \Datetime()
			);
			
			return $this->render('AkaBlogBundle:Blog:modifier.html.twig',
			array(
			'article' => $article
			));

			}
			
		  public function supprimerAction($id)
			{
			
				}

			
			
	
		     public function menuAction($nombre)
	
			{
			$liste = array(
				array('id' => 2, 'titre' => 'My Last trip !'),
				array('id' => 5, 'titre' => 'Justin Bieber new album'),
				array('id' => 9, 'titre' => 'Technical test')
				);
				
				return $this->render('AkaBlogBundle:Blog:menu.html.twig', array(
				'liste_articles' => $liste
				));

	
				}
			
			
			
       }	