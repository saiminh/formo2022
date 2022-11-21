function addHideOnMobileToggle(settings, name) {
  if (typeof settings.attributes !== 'undefined') {
    if (name == 'core/column') { //whichever block you want to target
      settings.attributes = Object.assign(settings.attributes, {
        hideOnMobile: {
          type: 'boolean',
        }
      });
    }
  }
  return settings;
}
wp.hooks.addFilter(
  'blocks.registerBlockType',
  'formo2022/hide-on-mobile',
  addHideOnMobileToggle
);

const addAdvancedControls = wp.compose.createHigherOrderComponent((BlockEdit) => {
  return (props) => {
    const { Fragment } = wp.element;
    const { ToggleControl } = wp.components;
    const { InspectorAdvancedControls } = wp.blockEditor;
    const { attributes, setAttributes, isSelected } = props;
    return (
      createElement(Fragment, null,
        createElement(BlockEdit, props),
        isSelected && (props.name == 'core/column') && createElement(InspectorAdvancedControls, null,
          createElement(ToggleControl, {
            label: 'Hide on mobile',
            checked: attributes.hideOnMobile,
            onChange: () => setAttributes({ hideOnMobile: !attributes.hideOnMobile })
          })
        )
      )
    );
  };
}, 'addAdvancedControls');
     
wp.hooks.addFilter(
  'editor.BlockEdit',
  'formo2022/column-advanced-control',
  addAdvancedControls
);

function applyExtraClass(extraProps, blockType, attributes) {
  const { hideOnMobile } = attributes;
     
  if (typeof hideOnMobile !== 'undefined' && hideOnMobile) {
    extraProps.className = extraProps.className + ' hide-on-mobile';
  }
  return extraProps;
}
     
wp.hooks.addFilter(
  'blocks.getSaveContent.extraProps',
  'formo2022/cover-apply-class',
  applyExtraClass
);