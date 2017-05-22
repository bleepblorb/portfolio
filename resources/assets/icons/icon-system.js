let icons = {

  <% _.forEach( icons, function( icon ){ %>
    "<%= icon.id %>" : {
      viewBox : "<%= icon.svg.viewBox %>",
      <% if (icon.title) {%>
        title : '<%= icon.title %>',
      <%}%>
      content  : '<%= icon.svg.content %>'
    },
  <%});%>
}

export {icons};
