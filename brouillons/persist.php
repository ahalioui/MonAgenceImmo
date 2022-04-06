$property = new Property();
        $property->setTitle('Mon Bien 1')
                 ->setDescription('Description de mon bien 1')
                 ->setSurface(600)
                 ->setRooms(9)
                 ->setBedrooms(6)
                 ->setFloor(2)
                 ->setCountry('Cameroun')
                 ->setCity('Yaounde')
                 ->setAddress('Bastos')
                 ->setPostalCode('99322')
                 ->setParking(4)
                 ->setStatus(1)
                 ->setType(2)
                 ->setPrice(200000000);
        $em = $this->getDoctrine()->getManager();
        $em->persist($property);

        $property1 = new Property();
        $property1->setTitle('Mon Bien 2')
                 ->setDescription('Description de mon bien 2')
                 ->setSurface(300)
                 ->setRooms(4)
                 ->setBedrooms(3)
                 ->setFloor(2)
                 ->setCountry('France')
                 ->setCity('paris')
                 ->setAddress('118 Boulevard Saint-Germain')
                 ->setPostalCode('75006')
                 ->setParking(4)
                 ->setStatus(0)
                 ->setType(1)
                 ->setPrice(80000);
        $em = $this->getDoctrine()->getManager();
        $em->persist($property1);

        $property2 = new Property();
        $property2->setTitle('Mon Bien 3')
                 ->setDescription('Description de mon bien 1')
                 ->setSurface(600)
                 ->setRooms(9)
                 ->setBedrooms(6)
                 ->setFloor(2)
                 ->setCountry('Gabon')
                 ->setCity('Libreville')
                 ->setAddress('Bord de Mer Immeuble BICP')
                 ->setPostalCode('943')
                 ->setParking(4)
                 ->setStatus(1)
                 ->setType(0)
                 ->setPrice(200000000);
        $em = $this->getDoctrine()->getManager();
        $em->persist($property2);
        $em->flush();