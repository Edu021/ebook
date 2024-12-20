<?php

/**
 * This class was created to be a easy way to import METABOXES files and control what metaboxes the pages will use.
 * @author Hangar Digital
 * @copyright Hangar Digital
 */

namespace theme;

class MTBImport
{


    private $_pages_files     = array();

    // -----------------------------------------------------------------------------

    public function __construct(){

        if( ! defined( 'MTBS_DIR' ) )
            define( 'MTBS_DIR', FUNCTIONS_DIR . '/metaboxes' );

        // Only called when it`s a page
         /* Only called when it`s a page
        $this->_pages_files   = array(
                "page-slug"        => "mtb-page-slug",
        );*/

        $this->importMetaboxes();
        $this->checkPage();

    }

    // -----------------------------------------------------------------------------

    /**
     * Detect if files  is an array of file  or just one and make the require
     * @return void
     */
    public function importMetaboxes(  )
    {

        //Carrega todos os metaboxes encontrados no diretório
        $metaboxes = glob( MTBS_DIR ."/*.php");
        foreach ($metaboxes as $key => $value) {
            $metaboxes[basename($value, ".php")] = $value;
            unset($metaboxes[$key]);
        }

        // Chama os metaboxes, caso eles não sejam específicos de páginas
        foreach ( $metaboxes as $nome_arquivo =>  $caminho_completo) {
            if( ! in_array( $nome_arquivo , $this->_pages_files) )
                require_once $caminho_completo;
        }
    }

    // -----------------------------------------------------------------------------

    /**
     * Check  which page is it, and make the metabox request necessary
     * @return
     */
    public function checkPage() {

        $postID = null;

        if( isset($_GET[ 'post'])  )
            $postID =  $_GET[ 'post'];

        if( isset( $_POST[ 'post_ID'] )  )
            $postID =  $_POST[ 'post_ID'];

        $post_current = get_post( $postID );

        if( !isset( $post_current->post_name ) )
            return ;

        $slug = $post_current->post_name;

        foreach($this->_pages_files as $k => $page ) {
            if($k == $slug || get_post_meta( $post_current->ID, '_wp_page_template', true ) == "page-".$k . ".php" )
                require_once MTBS_DIR . '/'. $page . '.php';
        }
    }

    // -----------------------------------------------------------------------------
}

new MTBImport;
