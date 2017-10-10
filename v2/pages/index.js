import { Provider, Heading, Button, Flex } from 'rebass';

import Card from '../components/Card';

const Index = () => {
    return (
        <Provider>
            <Heading is="h1">
                I am a designer and developer studying HCI at the University of
                Washington in Seattle
            </Heading>
            <Heading is="h2">
                Currently, I am working on DubHacks. Previously, I designed
                experiences at Amazon.
            </Heading>
            <Heading>Selected Projects</Heading>
            <Button children="meulen@uw.edu" />
            <Button children="Explore my work" />
            <Flex>
                <Card>Amazon Trade-In</Card>
                <Card>CarMax</Card>
                <Card>Get There</Card>
                <Card>Scout</Card>
                <Card>Perduko</Card>
                <Card>Creative Aid</Card>
            </Flex>
        </Provider>
    );
};

export default Index;
