<?php

declare(strict_types=1);

/*
 * (c) 2020 Michael Joyce <mjoyce@sfu.ca>
 * This source file is subject to the GPL v2, bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controller;

use App\Entity\Item;
use App\Repository\ItemRepository;
use Knp\Bundle\PaginatorBundle\Definition\PaginatorAwareInterface;
use Nines\UtilBundle\Controller\PaginatorTrait;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController implements PaginatorAwareInterface {
    use PaginatorTrait;

    /**
     * Show the home page.
     *
     * @Route("/", name="homepage", methods={"GET"})
     * @Template()
     *
     * @return array
     */
    public function indexAction(Request $request, itemRepository $itemRepository ) {
        return [
            'items' => $itemRepository->featuredItemsQuery()
        ];
    }

    /**
     * Show the privacy page.
     *
     * @Route("/privacy", name="privacy", methods={"GET"})
     * @Template()
     *
     * @return array
     */
    public function privacyAction(Request $request) {
        return [];
    }
}
