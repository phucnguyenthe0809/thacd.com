<?php
function showError($errors,$nameInput)
{
    if($errors->has($nameInput))
    {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<strong>'.$errors->first($nameInput).'</strong>';
    echo '</div>';
    }
 
}
function getCategory($danhMuc, $idCha, $chuoiTab,$idChon) {

    foreach($danhMuc as $banGhi) {

        if($banGhi['id_parent']==$idCha) {

           if($banGhi['id']==$idChon)

           {

            echo  '<option selected value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';

           }

           else {

            echo  '<option value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';

           }

            getCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|',$idChon);

        }

    }

}

function showCategory($danhMuc, $idCha, $chuoiTab) {

    foreach($danhMuc as $banGhi) {

        if($banGhi['id_parent']==$idCha) {

            echo '

            <div class="item-menu"><span>'.$chuoiTab.$banGhi['name'].'</span>

            <div class="category-fix">

                <a class="btn-category btn-primary" href="/admin/category/edit/'.$banGhi['id'].'"><i class="fa fa-edit"></i></a>

                <a onclick="return delCate(\''.$banGhi['name'].'\')" class="btn-category btn-danger" href="/admin/category/del/'.$banGhi['id'].'"><i class="fas fa-times"></i></i></a>

            </div>

            </div>

            ';

            showCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|');

        }

    }

}

function getLevel($danhMuc,$idCha,$cap)

{

	foreach($danhMuc as $banGhi)

	{

		if($banGhi['id']==$idCha)

		{

			$cap++;

			if($banGhi['id_parent']==0)

			{

				return $cap;

			}

		    return getLevel($danhMuc,$banGhi['id_parent'],$cap);

		}

	}

}



function arrCate($categories,$id,&$array)

{

	foreach($categories as $row)

	{

		if($row->id_parent==$id)

		{

			$array[]=$row->id;

			arrCate($categories,$row->id,$array);

		}

		

	

	}



}
function removeAllFile($dir){
    if (is_dir($dir))
    {
        $structure = glob(rtrim($dir, "/").'/*');
        if (is_array($structure)) {
            foreach($structure as $file) {
                if (is_dir($file)) recursiveRemove($file);
                else if (is_file($file)) @unlink($file);
            }
        }
    }
}