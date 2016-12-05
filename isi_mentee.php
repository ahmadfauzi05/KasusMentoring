  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Isi Dengan Benar</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group"> 

                                                <input type="text" name="nim" class="form-control" placeholder="NIM * ">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="nama" class="form-control" placeholder="Nama *">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Agama</label>
                                                <select class="form-control" name="agama">
                                                    <option>Islam</option>
                                                    <option>Kristen Khatolik</option>
                                                    <option>Kristen</option>
                                                    <option>Budha</option>
                                                    <option>Hindu </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Tanggal Lahir</label>
                                                <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                                    <input size="16" type="text" value="" readonly class="form-control">
                                                        <span class="add-on"><i class="icon-remove"></i></span>
                                                        <span class="add-on"><i class="icon-th"></i></span>
                                                </div>
                                                <input type="hidden" id="dtp_input1" value="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Jenis Kelamin</label>
                                                <select class="form-control" name="jk">
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="alamat" rows="8" cols="80" placeholder="Alamat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="no_telp"  maxlength="12" placeholder="No.Telephone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="tahun_angkatan" placeholder="Angkatan">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Status Aktif</label>
                                                <select class="form-control" name="status_aktif">
                                                    <option>Aktif</option>
                                                    <option>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>