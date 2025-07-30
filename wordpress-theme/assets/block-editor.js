wp.domReady(() => {
    // Register block styles for existing blocks
    
    // Button styles
    wp.blocks.registerBlockStyle('core/button', [
        {
            name: 'primary-gradient',
            label: 'Primary Gradient',
            isDefault: false,
        },
        {
            name: 'accent-gradient',
            label: 'Accent Gradient',
            isDefault: false,
        },
        {
            name: 'outline-hover',
            label: 'Outline with Hover',
            isDefault: false,
        }
    ]);

    // Group styles
    wp.blocks.registerBlockStyle('core/group', [
        {
            name: 'card-style',
            label: 'Card Style',
            isDefault: false,
        },
        {
            name: 'hero-section',
            label: 'Hero Section',
            isDefault: false,
        },
        {
            name: 'section-padding',
            label: 'Section Padding',
            isDefault: false,
        }
    ]);

    // Heading styles
    wp.blocks.registerBlockStyle('core/heading', [
        {
            name: 'gradient-text',
            label: 'Gradient Text',
            isDefault: false,
        },
        {
            name: 'section-label',
            label: 'Section Label',
            isDefault: false,
        }
    ]);

    // Column styles
    wp.blocks.registerBlockStyle('core/column', [
        {
            name: 'service-card',
            label: 'Service Card',
            isDefault: false,
        },
        {
            name: 'project-card',
            label: 'Project Card',
            isDefault: false,
        }
    ]);

    // Image styles
    wp.blocks.registerBlockStyle('core/image', [
        {
            name: 'profile-image',
            label: 'Profile Image',
            isDefault: false,
        },
        {
            name: 'project-image',
            label: 'Project Image',
            isDefault: false,
        }
    ]);
});