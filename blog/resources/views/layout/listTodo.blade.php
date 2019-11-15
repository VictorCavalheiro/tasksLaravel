<div class="container-fluid">
    <div class="row align-items-center justify-content-center" style="height:100vh;">     
    <div class="container-fluid">
    <div class="table-responsive" id="tableTodo"> 
    <table class="table table-dark" width="400">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Data de Criação</th>
                <th>Data de termino</th>
                <th>Finalizada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr style="background-color: <?php if($record->finalizada>0){echo "#1E7624";}else{ echo "#C34537";}  ?>;">
                <td>{{$record->descricao}}</td>
                <td>{{$record->data_de_criacao}}</td>
                <td>{{$record->data_de_termino}}</td>
                <td>
                    <?php
                    if($record->finalizada>0):
                        ?> Finalizada
                    <?php endif; ?>
                    <?php
                    if($record->finalizada==0):
                        ?> Pendente
                    <?php endif; ?>
                        
                    
                </td>
                <td> 
                <a href="{{route('todo.destroy',$record->id)}}"><button type="button" class="btn btn-warning" >Deletar</button></a>
                <a href="{{route('todo.update',$record->id)}}"><button type="button" class="btn btn-dark" >Finalizar</button></a>
                

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{route('todo.insert')}}"><button type="button" class="btn btn-primary" >Add Task</button></a>
</div>
    </div>
</div>

