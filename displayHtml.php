<?php


//Namespace declaration

namespace TableDisplay;


class displayHtml{



    public static function displayTable($records){

        $html = '<table border = 6><tbody>';

        $html .= '<tr>';



        foreach($records[0] as $key=>$value){

            $html .= '<th>' . htmlspecialchars($key) . '</th>';

        } 



        $html .= '</tr>';

    

        foreach($records as $key=>$value){

            $html .= '<tr>';

                foreach($value as $key2=>$value2)

                {



                    $html .= '<td>' . htmlspecialchars($value2) . '<br></td>';



                }

            $html .= '</tr>';

        }

        $html .= '</tbody></table>';

        return $html;

    }     







    public static function displayTableAlternate($records){

        $html = '<table border = 6><tbody>';

        $html .= '<tr>';

        foreach($records as $key => $value){

            $html .= '<th>' . htmlspecialchars($key) . '</th>';

        }

        $html .= '</tr>';

        foreach($records as $value){

            $html .= '<td>' . $value . '</td>';

        }

        $html .= '</tr></table>';

        return $html;

    }

}  



?>