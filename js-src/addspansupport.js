const { createElement, Fragment } = window.wp.element
const components = window.wp.components
const { registerFormatType, toggleFormat } = window.wp.richText
const { RichTextShortcut } = window.wp.editor;
const { RichTextToolbarButton } = window.wp.blockEditor;
[
  {
    name: 'alternative',
    title: ' Alternative',
    icon: 'star-filled',
  },
  {
    name: 'smaller',
    title: ' Smaller',
    icon: 'arrow-down',
  },
  {
    name: 'smaller-top',
    title: ' Smaller Top',
    icon: 'arrow-up',
  },
  {
    name: 'wide',
    title: ' Wide',
    icon: 'leftright',
  },
  {
    name: 'outlined',
    title: ' Outlined',
    icon: 'marker',
  },
  {
    name: 'special',
    title: ' Special',
    icon: 'admin-appearance',
  }
].forEach(({ name, title, icon}) => {
  const type = 'advanced/' + name;

  if ( type === 'advanced/alternative' ) {
    registerFormatType( type, {
      title,
      tagName: 'abbr',
      className: 'star_alternative',
      attributes: {
        title: 'title',
        dataTitle: 'data-title'
      },
      edit (props) {
        const onToggle = () => { 
          props.onChange(
            toggleFormat(props.value, { 
              type,
              attributes: { 
                title: 'alternative',
                dataTitle: 'alternative'
              }
            })
          )}
  
        return [
            createElement(Fragment, { key: 'fragment'},
              createElement(RichTextToolbarButton, {
                key: 'toolbarbuttn',
                title,
                icon: icon,
                onClick: onToggle,
                isActive: props.isActive,
              }, title)
            ),
            props.isActive && ( createElement( components.Popover,
              {
                key: 'popover',
                position: "bottom center",
                headerTitle: "hanypanky"
              },
              
                createElement( components.TextControl, {
                  key: 'textcontrol',
                  placeholder: "Type the pill text here",
                  value: props.activeAttributes.title,
                  style: { width: '200px' },
                  onChange:  (newName) => {
                    const newval = wp.richText.applyFormat(
                        props.value,
                        {
                          type,
                          attributes: { 
                            title: !newName ? 'alternative' : newName,
                            dataTitle: !newName ? 'alternative' : newName
                          }
                        }
                    );
                    props.onChange( newval );
                  },
                })
              
            ))
        ]
      }
    })
  }
  else {
    registerFormatType(type, {
      title,
      tagName: 'span',
      className: name,
      edit ({ isActive, value, onChange }) {
        const onToggle = () => onChange(toggleFormat(value, { type }))
  
        return (
          createElement(Fragment, null,
            createElement(RichTextToolbarButton, {
              title,
              icon: icon,
              onClick: onToggle,
              isActive,
              className: 'toolbar-button-with-text toolbar-button__advanced-' + name
            })
          )
        )
      }
    })
  }
})