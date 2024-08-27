const { createElement, Fragment } = window.wp.element
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
    registerFormatType(type, {
      title,
      tagName: 'abbr',
      className: name,
      attributes: {
        'title': 'title',
        'data-title': 'data-title'
      },
      edit ({ isActive, value, onChange }) {
        const onToggle = () => onChange(
          toggleFormat(value, { 
            type,
            attributes: { 
              'title': 'alternative',
              'data-title': 'alternative'
            }
          }),
        )
  
        return (
          createElement(Fragment, null,
            createElement(RichTextToolbarButton, {
              title,
              icon: icon,
              onClick: onToggle,
              isActive,
            })
          )
        )
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