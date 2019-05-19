# FirstController
- [index](#index)
- [create](#create)
- [store](#store)
- [show](#show)
- [edit](#edit)
- [update](#update)
- [destroy](#destroy)
<a name='index'></a>
## index
### description
    Display a listing of the resource 1.
### return
     \Illuminate\Http\Response
### function signature
   public function index()
### function name
    index
<a name='create'></a>
## create
### description
    Show the form for creating a new resource 1.
### return
     \Illuminate\Http\Response
### function signature
   public function create()
### function name
    create
<a name='store'></a>
## store
### description
    Store a newly created resource 1 in storage.
### param
      \Illuminate\Http\Request  $request
### return
     \Illuminate\Http\Response
### function signature
   public function store(Request $request)
### function name
    store
<a name='show'></a>
## show
### description
    Display the specified resource 1.
### param
      int  $id
### return
     \Illuminate\Http\Response
### function signature
   public function show($id)
### function name
    show
<a name='edit'></a>
## edit
### description
    Show the form for editing the specified resource 1.
### param
      int  $id
### return
     \Illuminate\Http\Response
### function signature
   public function edit($id)
### function name
    edit
<a name='update'></a>
## update
### description
    Update the specified resource 1 in storage.
### param
      \Illuminate\Http\Request  $request
      int  $id
### return
     \Illuminate\Http\Response
### function signature
   public function update(Request $request, $id)
### function name
    update
<a name='destroy'></a>
## destroy
### description
    Remove the specified resource 1 from storage.
### param
      int  $id
### return
     \Illuminate\Http\Response
### function signature
   public function destroy($id)
### function name
    destroy
