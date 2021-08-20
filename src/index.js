import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

const blockStyle = {
    backgroundColor: '#900',
    color: '#fff',
    padding: '20px',
};
 
registerBlockType( 'bpws/test-block', {
    apiVersion: 2,
    title: 'Test Block',
    icon: 'universal-access-alt',
    category: 'design',
    example: {},
    edit() {
        const blockProps = useBlockProps( { style: blockStyle } );
 
        return (
            <div { ...blockProps }>Hello World (from the editor).</div>
        );
    },
    save() {
        const blockProps = useBlockProps.save( { style: blockStyle } );
 
        return (
            <div { ...blockProps }>
                Hello World (from the frontend).
            </div>
        );
    },
} );