<?php

class Application
{
    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovies()
    {
        $title = readline('Enter the title of the movie: ');
        /** @var VideoStore $videoStore */
        $videoStore->addVideo($title);
    }

    private function rent_video()
    {
        $title = readline('Enter the title of the movie: ');

        /** @var VideoStore $videoStore */
        $videoStore->checkoutVideo($title);
    }

    private function return_video()
    {
        $title = readline('Enter the title of the movie: ');

        /** @var VideoStore $videoStore */
        $videoStore->returnVideo($title);
    }

    private function list_inventory()
    {
        /** @var VideoStore $videoStore */
        $videos = $videoStore->allVideos();
        foreach ($videos as $video) {
            echo $video . PHP_EOL;
        }
    }
}


