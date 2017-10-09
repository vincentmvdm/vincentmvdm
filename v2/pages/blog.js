import { Provider, Heading, Button, Text } from "rebass";

const Blog = () => {
    return (
        <Provider>
            <Heading f={6}>Blog</Heading>
            <Heading f={4}>How much advice you need?</Heading>
            <Text>Etiam lacinia orci faucibus posuere cursus. Phasellus bibendum accumsan magna sed pharetra. Proin quis orci vitae erat condimentum tristique</Text>
            <Heading f={4}>Prototyping happiness</Heading>
            <Text>Donec sed porta nunc. Vestibulum ullamcorper metus et facilisis fringilla. Nunc tortor elit, pulvinar sit amet lectus vel, pretium ultrices ipsum.</Text>
            <Heading f={4}>Ethics in Modern Design Education</Heading>
            <Text>Aliquam eu nibh mattis, sollicitudin est non, malesuada magna. Morbi est ipsum, mollis fermentum auctor sed, sagittis a odio. In ac ipsum odio</Text>
        </Provider>
    );
};

export default Blog;
