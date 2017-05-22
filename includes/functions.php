<?php
    function createNote($context)
    {
        $html ='<div class="note folded-rightbottom shadow fold">';
        $html .='<header class="text-center">Note</header>';
        $html .= '<div class="noteBody">'.$context.'</div>';
        $html .= '</div>';
        return $html;
    }
?>