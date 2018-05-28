<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of blogcontroller
 *
 * @author https://roytuts.com
 */
class BlogController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('RatingModel', 'blog');
    }

    function index() {
        //the hard-coded blog id value 1 should come from UI



       
        // $data['blog_vote_overall_rows'] = $vote_results['vote_rows'];
        // $data['blog_vote_overall_rate'] = $vote_results['vote_rate'];
        // $data['blog_vote_overall_dec_rate'] = $vote_results['vote_dec_rate'];
        
        // $data['blog_vote_ip_rate'] = $vote_results['vote_rate'];

       
        $this->load->view('NewsFeedView');
    }


    public function loadData(){

        $user_id = $this->session->userData('loggerid');

        if($user_id == ""){

                $user_id=0;
        }


        $blog_id =$this->input->post('blog_id');

        $vote_results = $this->blog->get_Analyse_vote($user_id,$blog_id);

    

          $blog_vote_overall_rows = $vote_results['vote_rows'];
            $blog_vote_overall_rate = $vote_results['vote_rate'];
            $blog_vote_overall_dec_rate = $vote_results['vote_dec_rate'];
            $blog_vote_ip_rate = $vote_results['vote_curr_rate'];

            $stars = '';

            $no = 1;


         if(1 <= floor($blog_vote_overall_rate)){
            
            for ($i = 1; $i <= floor($blog_vote_overall_rate); $i++) {

            
                $stars .= '<div class="star" id="' . $i . '"></div>';
                $no ++;




            }


            echo json_encode('<input  type="hidden" id="'.$blog_id.'q'.'" value="'.$no.'"  ><div class="r"><div class="rating">' . $stars . '</div>' .
            '<div class="transparent">
                <div class="star" id="1"></div>
                <div class="star" id="2"></div>
                <div class="star" id="3"></div>
                <div class="star" id="4"></div>
                <div class="star" id="5"></div>
                <div class="votes">(' . $blog_vote_overall_dec_rate . '/5, ' . $blog_vote_overall_rows . ' ' . ($blog_vote_overall_rows > 1 ? ' votes' : ' vote') . ') ' . ($blog_vote_ip_rate > 0 ? '<strong>You rated this: <span style="color:#39C;">' . $blog_vote_ip_rate . '</span></strong>' : '') . '</div>
              </div>
            </div>');

        }else{
                echo json_encode('<input type="hidden"  id="'.$blog_id.'q'.'" value="'.$no.'"  ><div class="r"><div class="rating">
                </div>
                
                <div class="transparent">
                <div class="star" id="1"></div>
                <div class="star" id="2"></div>
                <div class="star" id="3"></div>
                <div class="star" id="4"></div>
                <div class="star" id="5"></div>
                <div class="votes">(' . $blog_vote_overall_dec_rate . '/5, ' . $blog_vote_overall_rows . ' ' . ($blog_vote_overall_rows > 1 ? ' votes' : ' vote') . ') ' . ($blog_vote_ip_rate > 0 ? '<strong>You rated this: <span style="color:#39C;">' . $blog_vote_ip_rate . '</span></strong>' : '') . '</div>
              </div>
            </div>');


        }

            



    }

    public function rate_blog() {

        $user_id = 18;
        $blog_id = 1;
        if (isset($_POST)) {
            $blog_id =$this->input->post('blog_id');
            $rating = $this->input->post('rating');
            $vote_results = $this->blog->insertRate($user_id,$blog_id,$rating);

             echo json_encode(array("data2"=>$vote_results));

            // $blog_vote_overall_rows = $vote_results['vote_rows'];
            // $blog_vote_overall_rate = $vote_results['vote_rate'];
            // $blog_vote_overall_dec_rate = $vote_results['vote_dec_rate'];
            // $blog_vote_ip_rate = $vote_results['vote_curr_rate'];
            // $stars = '';
            // for ($i = 1; $i <= floor($blog_vote_overall_rate); $i++) {
            //     $stars .= '<div class="star" id="' . $i . '"></div>';
            // }

            // $test = "test";
            // //THE OVERALL RATING (THE OPAQUE STARS)
            // echo '<div class="r"><div class="rating">' . $stars . '</div>' .
            // '<div class="transparent">
            //     <div class="star" id="1"></div>
            //     <div class="star" id="2"></div>
            //     <div class="star" id="3"></div>
            //     <div class="star" id="4"></div>
            //     <div class="star" id="5"></div>
            //     <div class="votes">(' . $blog_vote_overall_dec_rate . '/5, ' . $blog_vote_overall_rows . ' ' . ($blog_vote_overall_rows > 1 ? ' votes' : ' vote') . ') ' . ($blog_vote_ip_rate > 0 ? '<strong>You rated this: <span style="color:#39C;">' . $blog_vote_ip_rate . '</span></strong>' : '') . '</div>
            //   </div>
            // </div>';
        }
    }


    public function rateme(){


            $user_id = $this->session->userData('loggerid');

            if($user_id == ""){

                $user_id=0;
            }

            $blog_id =$this->input->post('blog_id');
            $rating = $this->input->post('rating');
            $vote_results = $this->blog->insertRate($user_id,$blog_id,$rating);

            $blog_vote_overall_rows = $vote_results['vote_rows'];
            $blog_vote_overall_rate = $vote_results['vote_rate'];
            $blog_vote_overall_dec_rate = $vote_results['vote_dec_rate'];
            $blog_vote_ip_rate = $vote_results['vote_curr_rate'];


            $stars = '';
            $no = 1;
            



         if(1 <= floor($blog_vote_overall_rate)){
            
            for ($i = 1; $i <= floor($blog_vote_overall_rate); $i++) {

            
                $stars .= '<div class="star" id="' . $i . '"></div>';
                $no ++;




            }


            echo json_encode('<input  type="hidden" id="'.$blog_id.'q'.'" value="'.$no.'"  ><div class="r"><div class="rating">' . $stars . '</div>' .
            '<div class="transparent">
                <div class="star" id="1"></div>
                <div class="star" id="2"></div>
                <div class="star" id="3"></div>
                <div class="star" id="4"></div>
                <div class="star" id="5"></div>
                <div class="votes">(' . $blog_vote_overall_dec_rate . '/5, ' . $blog_vote_overall_rows . ' ' . ($blog_vote_overall_rows > 1 ? ' votes' : ' vote') . ') ' . ($blog_vote_ip_rate > 0 ? '<strong>You rated this: <span style="color:#39C;">' . $blog_vote_ip_rate . '</span></strong>' : '') . '</div>
              </div>
            </div>');

        }else{
                echo json_encode('<input type="hidden"  id="'.$blog_id.'q'.'" value="'.$no.'"  ><div class="r"><div class="rating">
                </div>
                
                <div class="transparent">
                <div class="star" id="1"></div>
                <div class="star" id="2"></div>
                <div class="star" id="3"></div>
                <div class="star" id="4"></div>
                <div class="star" id="5"></div>
                <div class="votes">(' . $blog_vote_overall_dec_rate . '/5, ' . $blog_vote_overall_rows . ' ' . ($blog_vote_overall_rows > 1 ? ' votes' : ' vote') . ') ' . ($blog_vote_ip_rate > 0 ? '<strong>You rated this: <span style="color:#39C;">' . $blog_vote_ip_rate . '</span></strong>' : '') . '</div>
              </div>
            </div>');


        }



            

          


    }

}